

<div class="container">
    <div class="row">
      
    </div>
</div>


<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3>Send new message 
                    <a href="{{url('/')}}" class="btn btn-danger btn-sm float-end">Back</a>
                </h3>

            </div>

            <div class="card-body">
                @if(session('message'))
                <h2>{{session('message') }}</h2>
                @endif
                @if($errors->any())
                <div class="alert alert-warning">
                    @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif
                <form action="{{route('all.adminstoremessage')}}" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane py-3 fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">

                            <div class="mb-3">
                                <label> Your Message </label>
                                <input type="text" name="message" class="form-control border border-dark mt-2">
                                @error('name') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3" style="display:none;">
                                <label> Notification </label>
                                <input type="text" name="notification" value=" message  Abhishek"
                                    class="form-control border border-dark mt-2">
                                @error('notification') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3" style="display:none;">
                                <label> User Id </label>
                                <input type="text" name="sender" value="1"
                                    class="form-control border border-dark mt-2">
                                @error('notification') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3" style="display:none;">
                                <label> Admin Id </label>
                                <input type="text" name="receiver" value="2"
                                    class="form-control border border-dark mt-2">
                                @error('notification') <small class="text-danger">{{$message}}</small> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status</label><br>
                                <input type="checkbox" name="status">
                                @error('status') <small class="text-danger">{{$message}}</small> @enderror
                            </div>

                    
                        </div>
                        <button class="btn btn-success px-4 py-2">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>



