<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Database;
use App\Models\Tables;
use App\Models\Fields;
use App\Models\Folders;
use App\Models\Files;
use App\Models\Interfaces;
use App\Models\Queries;
use App\Models\Workflows;

use Illuminate\Http\Request;
// use Illuminate\View\View;

class ParameterController extends Controller
{
    public function index()
    {
    	return view('parameter.menu');
    }

    public function parameters()
    {
    	$parameters = Parameter::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.parameter',['params' => $parameters]);
    }

    public function databases()
    {
    	$parameters = Database::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.databases',['params' => $parameters]);
    }

    public function tables()
    {
    	$parameters = Tables::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.tables',['params' => $parameters]);
    }

    public function folders()
    {
    	$parameters = Folders::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.folders',['params' => $parameters]);
    }

    public function fields()
    {
    	$parameters = Fields::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.fields',['params' => $parameters]);
    }

    public function interfaces()
    {
    	$parameters = Interfaces::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.interface',['params' => $parameters]);
    }

    public function workflows()
    {
    	$parameters = Workflows::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.workflows',['params' => $parameters]);
    }

    public function files()
    {
    	$parameters = Files::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.files',['params' => $parameters]);
    }

    public function Queries()
    {
    	$parameters = Queries::paginate(15);

        // return view('parameter.menu')->with('params',$parameters);
        return view('parameter.queries',['params' => $parameters]);
    }

}
