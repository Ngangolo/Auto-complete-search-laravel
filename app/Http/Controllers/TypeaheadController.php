<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\copro;
class TypeaheadController extends Controller
{
   
    public function index()
    {
        return view('welcome');
    }
 
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = User::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    } 

    
    public function accueil()
    {
        return view('accueil');
    }
    
    public function addcopros(Request $request)
    {
        $data = $request->all();
        copro::create($data);
        session()->flash('success',"Nouvelle categorie Ajoutée !");
        return redirect()->route('accueil');
    }
    
    public function ListCopros(Request $request)
    {
        $copros= copro::latest()->take(8)->get();
        return view('listcopro', compact('copros'));
    }
    
    public function showCopro(Request $request)
    {
        $blocs = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        $Apparts = array();
        
        $copro= copro::where('id', $request->id)->first();
         //dd($copro->nbBloc);
        for ($i = 0; $i < $copro->nbBloc; $i++) {
            for ($j = -1; $j <= $copro->nbEtage; $j++) {
                for ($k = 1; $k <= $copro->nbAppart; $k++) {
                  
                    $Apparts[]= "Appartement"."  ".$blocs[$i]."-".$j."-".$k;

                }
            }
        }
        $nb = sizeof($Apparts);
       // dd($nb);

        return view('detailcopro', compact('Apparts','nb'));
    }
}