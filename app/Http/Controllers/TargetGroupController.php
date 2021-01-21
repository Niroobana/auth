<?php

namespace App\Http\Controllers;
use App\TargetGroup;
use Illuminate\Http\Request;
use App\Http\Requests\TargetgroupstoreRequest;

class TargetGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $target_groups = TargetGroup::latest()->paginate(5);

        return view('admin.target_group.index',compact('target_groups'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.target_group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(TargetgroupstoreRequest $request)
    {
        //$target_group = new Targetgroup();
        // $target_group->setAttribute('target_group',$request->input('target_group'));
        // $target_group->setAttribute('description',$request->input('description'));

        // $target_group->save();
        // return redirect()->route('admin.target_group.index')
        //                 ->with('success','target_group created successfully.');


        $data = $request->only( 'target_group','description');
$data['user_id'] = Auth::user()->id;
    $target_group = Targetgroup::create($data);
    return redirect()->route('edit_course', ['id' => $target_group->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $target_group = Targetgroup::find($id);
        return view('admin.target_group.show',compact('target_group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TargetGroup $target_group)
    {
        return view('admin.target_group.edit',compact('target_group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TargetgroupstoreRequest $request, TargetGroup $target_group)
    {


        // $target_group->setAttribute('target_group',$request->input('target_group'));
        // $target_group->setAttribute('description',$request->input('description'));

        // $target_group->update($request->all());
        // return redirect()->route('admin.target_group.index')
        //                 ->with('success','target_group created successfully.');

        //                 $data = $request->only('course_name', 'duration','course_type','target_group','description');
        $data = $request->only( 'target_group','description');
                        $target_group->fill($data)->save();
                        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(TargetGroup $target_group)
    {
        return view('admin.target_group.delete', compact('target_group'));
    }

    public function destroy(TargetGroup $target_group)
    {
        $target_group->delete();

        return redirect()->route('admin.target_group.index')
                        ->with('success','target_group deleted successfully');
    }
}


