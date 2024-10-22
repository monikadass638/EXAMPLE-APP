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
        <h5>User Skills</h5>
        <input type="checkbox" name="skills[]" value="PHP" id="php"  />
        <label for="php">PHP</label>
        <input type="checkbox" name="skills[]" value="Node" id="node"  />
        <label for="node">Node</label>
        <input type="checkbox" name="skills[]" value="Java" id="java"  />
        <label for="java">Java</label>
    </div>
    <div class="input-wrapper">
        <h5>User Gender</h5>
        <input type="radio" name="gender" value="Male" id="male"  />
        <label for="male">Male</label>
        <input type="radio" name="gender" value="Female" id="female"  />
        <label for="female">Female</label>

    </div>
    <div class="input-wrapper">
        <h5>User Country</h5>
        <select id="country" name="Country">
            <option value="Australia">Australia</option>
            <option value="America">America</option>
            <option value="Canada">Canada</option>
        </select>

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
   input[type = "checkbox"]
    {
    
    height: 16px;
    width: 33px;
    
    }
    input[type="radio"]
    {
        height: 16px;
        width: 33px;
    }
    select
    {
        height: 30px;
        width: 95px;
    }
    
</style>
