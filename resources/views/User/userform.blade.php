<div>
    <h2>Add New User</h2>
    <form method="POST" action="/addnewuser">
        @csrf
    <div class="input-wrapper">
    <input type="text" name="username" placeholder="Enter your name">
    </div>
    <div class="input-wrapper">
    <input type="text" name="email" placeholder="Enter your email">
    </div>  
    <div class="input-wrapper">
    <input type="text" name="city" placeholder="Enter your city">
    </div>  
    <div class="input-wrapper">
    <button>Add new user</button>
    </div> 
    </form>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>
<style>
    input
    {
        border:1px solid orange;
        width:200px;
        height:45px;
        border-radius: 5px;
        color:black;
        padding:10px;
    }
    .input-wrapper
    {
        margin-top:10px;
        margin-bottom:10px;
        text-align: center;
    }
    button
    {
        border:1px solid orange;
        width:200px;
        height:45px;
        border-radius: 5px;
        color:black;
        padding:10px;
    }
</style>
