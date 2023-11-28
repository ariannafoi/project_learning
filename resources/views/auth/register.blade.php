<x-layout>

    <div class="container-fluid">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center default-text py-3"><i class="fa fa-lock"></i>Register</h3>
                        <!--form body-->
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="md-form">
                                <input type="text" id="defaultForm-email" class="form-control" name="name">
                                <label for="defaultForm-email">Name</label>
                            </div>
                            <div class="md-form">
                                <input type="email" id="defaultForm-email" class="form-control" name="email">
                                <label for="defaultForm-email">Email</label>
                            </div>
                            <div class="md-form">
                                <input type="password" id="defaultForm-pass" class="form-control" name="password">
                                <label for="defaultForm-pass">Your password</label>
                            </div>
                            <div class="md-form">
                                <input type="password" id="defaultForm-pass" class="form-control" name="password_confirmation">
                                <label for="defaultForm-pass">Entry password again</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-default waves-effect waves-light">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>                
        </div>
    </div>
    
</x-layout>
