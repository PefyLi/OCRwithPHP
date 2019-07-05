<!doctype html>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Upload File Example</div><br>

                <div class="card-body">
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">o</button>

                            <strong>{{ $message }}</strong>

                        </div>

                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                        <form action="{{ route('uploadFilePost') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
                            </div><br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</html>