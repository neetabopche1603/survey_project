<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function welcome(){
        $country = DB::table('country')->get();
        return view('welcome',compact('country'));
    }
    public function addSurvey(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'family_head_name' => 'required',
            'father_name'=>'required',
            'surname'=>'required',
            'address' => 'required',
            'mobile' => 'required|unique:users,mobile|max:10',
            'ward' => 'required',
            'vidhan' => 'required',
            'name' => 'required',
            'relation' => 'required',
            'age' => 'required',
            'citizenship' => 'required',
            'voter' => 'required',
            'other' => 'required',

        ]);

        $surveyId = substr(md5(time()), 0, 6);

        $survey = new Survey();
        $survey->family_head_name = $request->family_head_name;
        $survey->father_name =$request->father_name;
        $survey->surname =$request->surname;        
        $survey->address = $request->address;
        $survey->mobile = $request->mobile;
        $survey->ward_no = $request->ward;
        $survey->vidhan_name = $request->vidhan;
        $survey->other_info = $request->other;
        $survey->surveyId = $surveyId;
        $survey->save();
        $this->addMember($request,$survey->id);
        return redirect()->back()->with('success', 'Survey Successfully Done.....');
      
    }

    public function addMember($request,$survey_id)
    {
        $count = count($request->name);
        for($i=0; $i<$count; $i++)
        {
            $member = new Member();
            $member->survey_id = $survey_id;
            $member->name = $request->name[$i];
            $member->relation = $request->relation[$i];
            $member->age = $request->age[$i];
            $member->citizenship = $request->citizenship[$i];
            $member->voter = $request->voter[$i];
            $member->save();
        }
        return $member;
      
    }
}
