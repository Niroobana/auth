<?php

namespace App\Http\Controllers;
use App\Course;
use App\Targetgroup;
use Illuminate\Http\Request;
use App\Http\Requests\CoursestoreRequest;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(5);

        return view('admin.courses.index',compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $targets = TargetGroup::select('id','target_group')->get();
        return view('admin.courses.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursestoreRequest $request)
    {
//      $course = new Course();
//         $course->setAttribute('course_name',$request->input('course_name'));
//         $course->setAttribute('duration',$request->input('duration'));
//         $course->setAttribute('course_type',$request->input('course_type'));
//         $course->setAttribute('target_group',$request->input('target_group'));
//         $course->setAttribute('description',$request->input('description'));
// //

//             $course->save();
//         return redirect()->route('admin.courses.index')
//                         ->with('success','course created successfully.');
 $data = $request->only('course_name', 'duration','course_type','target_group','description');
$data['user_id'] = Auth::user()->id;
    $course = Course::create($data);
    return redirect()->route('edit_course', ['id' => $course->id]);
//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('admin.courses.show',compact('course'));
    //     $post = Post::published()->findOrFail($id);
    // return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
     {
        $targets = TargetGroup::select('id','target_group')->get();
        return view('admin.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CoursestoreRequest $request, Course $course)
    {

        // $course->setAttribute('course_name',$request->input('course_name'));
        // $course->setAttribute('duration',$request->input('duration'));
        // $course->setAttribute('course_type',$request->input('course_type'));
        // $course->setAttribute('target_group',$request->input('target_group'));
        // $course->setAttribute('description',$request->input('description'));



        // $course->save();
        // return redirect()->route('admin.courses.index')
        //                 ->with('success','course updated successfully');
                        $data = $request->only('course_name', 'duration','course_type','target_group','description');

                        $course->fill($data)->save();
                        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function delete(Course $course)
    {
        return view('admin.courses.delete', compact('course'));
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.courses.index')
                        ->with('success','course deleted successfully');
    }
}
