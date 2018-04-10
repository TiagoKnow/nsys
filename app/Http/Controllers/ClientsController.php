<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAction(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('bubbles.index');
        }

        //Paginate
        $bubbles = Bubble::paginate(10);

        // transform data
        $rows = [];
        foreach ($bubbles as $bubble) {
            $row = json_decode(json_encode($bubble), true);
            $row['status'] = Labels::$n_status[(int)$row['status']];
            $row['edit'] = route('bubbles.edit', ['id' => $bubble->id]);
            $row['delete'] = route('bubbles.remove', ['id' => $bubble->id]);
            $rows[] = $row;
        }

        // response data to view
        return JsonResponse::create([
            'rows' => $rows,
            'total' => $bubbles->total()
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return View
     */
    public function editAction(Request $request, $id)
    {
        if ($request->getMethod() == 'GET') {
            $bubble = Bubble::find($id);

            if (!$bubble) {
                $request->session()->flash('message', "Bubble [$id] não encontrado");
                return redirect()->route('bubbles.list');
            }

            $origins = Origin::getOrigin();
            $services = Service::getServices();
            $templates = Template::getTemplate();
            $actions = Actions::getAction();

            return view('bubbles.form', [
                'bubble' => $bubble,
                'origins' => $origins,
                'services' => $services,
                'templates' => $templates,
                'actions' => $actions
            ]);
        }

        $request->session()->flash('message', "Método não permitido");
        return redirect()->route('bubbles.list');
    }

    public function saveAction(Request $request)
    {
        $params = $request->all();
        unset($params['_token'], $params['q']);

        $routeBack = $request->get('redirect', false);
        if (!$routeBack) {
            $routeBack = 'bubbles.new';
            if (isset($params['id']) && (int) $params['id'] > 0) {
                $routeBack = 'bubbles.edit';
            }
        }

        if ($request->getMethod() == 'POST') {

            $this->validate($request,
                [
                    'label' => 'required',
                    'description' => 'required'
                    //Fazer a validação das steps também
                ]
            );

            //update
            if ($routeBack == 'bubbles.edit') {
                $bubble = Bubble::find($params['id']);

                if (!$bubble) {
                    $request->session()->flash('message', "Bubble [{$params['id']}] não encontrado");
                    return redirect()->route('bubbles.list');
                }

                $bubble->fill($params);
                $bubble->update();

                $request->session()->flash('message', "Bubble [{$bubble->label}] atualizado com sucesso!");
                $request->session()->flash('success', true);
                return redirect()->route('bubbles.list');
            }

            //insert bubble
            $id = Bubble::create($params);

            //insert bubble step
            $step = new Step;
            $step->bubble_id = $id->id;
            $step->template_id = Input::get('template_id');
            $step->action_id = Input::get('action_id');
            $step->order = 1;
            $step->delay_execution_time = Input::get('delay_execution_time');
            $step->status = Input::get('template_id');
            $step->save();

            $request->session()->flash('message', "Bubble criado com sucesso");
            $request->session()->flash('success', true);
            $redirect = $request->get('redirect', false) != false ? $request->get('redirect') : 'bubbles.list';
            return redirect()->route($redirect);
        }

        $request->session()->flash('message', "Método não permitido");
        return redirect()->route('contacts.list');
    }

    /**
     * @return View
     */
    public function newAction()
    {
        $bubble = new Bubble;

        $origins = Origin::getOrigin();
        $services = Service::getServices();
        $templates = Template::getTemplate();
        $actions = Actions::getAction();

        return view('bubbles.form', [
            'bubble' => $bubble,
            'origins' => $origins,
            'services' => $services,
            'templates' => $templates,
            'actions' => $actions
        ]);
    }



    public function removeAction(Request $request, $id)
    {
        $bubble = Bubble::find($id);

        if (!$bubble) {
            $request->session()->flash('message', "Bubble [$id] não encontrado");
            return redirect()->route('bubbles.list');
        }

        $bubbleLabel = $bubble->label;
        Bubble::destroy($id);

        $request->session()->flash('message', "Bubble [{$bubbleLabel}] removido com sucesso");
        $request->session()->flash('success', true);

        return redirect()->route('bubbles.list');
    }
}
