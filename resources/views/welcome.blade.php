@includeIf('common.header')
@includeIf('common.banner' ,['page' => 'This is my Home page'])
<style>
    .success
    {
        background-color:lightgreen;
        color:green;
        padding:10px;
        border-radius:10px;
        margin-top:10px;
        text-align: center;
        display:inline-flex;
    }
    .error
    {
        background-color:lightcoral;
        color:red;
        padding:10px;
        border-radius:10px;
        margin-top:10px;
        text-align: center;
        display:inline-flex;
    }
    .warning
    {
        background-color:lightsalmon;
        color:yellow;
        padding:10px;
        border-radius:10px;
        margin-top:10px;
        text-align: center;
        display:inline-flex;
    }
</style>    
<div>
    <x-message-banner  msg="User Logged In successfully" class="success" />
    <x-message-banner  msg="Password doesnot work" class="error" />
    <x-message-banner  msg="something went wrong" class="warning" />
</div>
<h1>Hello I am here Laravel</h1>
<a href="/about">About</a>
<a href="/contact">Contact</a>
<a href="/value/monika">Value</a>
<a href="/home">Home</a><br/>
<a href="{{ route('hm')}}">checking named Route</a>