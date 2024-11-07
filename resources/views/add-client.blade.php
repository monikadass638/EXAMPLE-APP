<div>
    <h1>Add new student</h1>

    <form method="post" action="client">
        @csrf
        <div>
            <input type="text" name="name"  placeholder="add your name"/>
        </div>
        <div>
            <input type="text" name="email" placeholder="add your email" />
        </div>
        <div>
            <input type="text" name="phone" placeholder="add your phone" />
        </div>
        <div>
            <button>Add new student</button>
        </div>
    </form>
</div>
