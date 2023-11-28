<x-layout>

    <div class="container-fluid mt-5">
        <!-- Grid row -->
        <div class="row justify-content-center">
            <!-- Grid column -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center default-text py-3">What is coming next?</h3>
                        <!--form body-->
                        <form action="{{route('topic.store')}}" method="POST">
                            @csrf
                            <div class="md-form">
                                <input type="text" id="defaultForm-email" class="form-control" name="topic_name" value="{{old('topic_name')}}" placeholder="Insert your note here">
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="button-87" role="button">Add Note</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>                
        </div>
    </div>

</x-layout>