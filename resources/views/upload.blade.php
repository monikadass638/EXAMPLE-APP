<div>
    <h1>
        Upload Form 
    </h1>
    <div>
        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="pic" id=""/>
            <br/>
            <br/>
            <button>Upload File</button>
        </form>
    </div>
</div>
