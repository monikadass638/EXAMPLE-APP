<div>
    <h3>Current Url is  : {{ URL::current()}}<h3>
    <h3>Current Url is  : {{ url()->current()}}<h3>
    <h3>Full Url is  : {{ URL::full()}}<h3>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>
<div>
    <a href="{{URL::to('Urlabout')}}">UrlAbout</a>
</div>
<div>
    <h3>Previous Url is : {{ URL::previous()}}</h3>
 </div>
