<div class="row">
    <div class="col-md-6">
        {!!Form::text('course_name','Course Name' )!!}
    </div>
    <div class="col-md-6">
        {!!Form::select('duration','Duration',['one_day'=>'One Day','two_days'=>'Two Days','three_days'=>'Three Days','four_days'=>'Four Days','five_days'=>'Five Days','ten_days'=>'Ten Days','one_month'=>'One Month','two_months'=>'Two Months','three_months'=>'Three Months']) !!}
    </div>
    <div class="col-md-6">
        {!!Form::select('course_type','Course Type',['diploma'=>'Diploma','certificate'=>'Certificate','other'=>'Other']) !!}
    </div>
    <div class="col-md-6">
        {!!Form::select('target_group', 'Target Group')->options($targets,'target_group') !!}
    </div>
    <div class="col-md-6">
        {!!Form::text('description','Description' )!!}
    </div>
</div>
