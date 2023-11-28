<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row m-0">
            @foreach ($topics as $topic)
            <div class="col-12 col-md-3">
                <div class="sticky-note">
                    <p class="p-sticky-note">{{$topic->topic_name}}</p>
                    <p>{{$topic->created_at->format('d M Y')}}</p>

                    <div class="p-2">
                        <a href="" class="text-black">
                            <i class="fa-solid fa-arrow-right-long position-absolute"></i>
                        </a>
    
                        <div class="span-sticky-note">
                            <a href="" class>
                                <span class="span-sticky-note"></span>
                                <span class="span-sticky-note"></span>
                                <span class="span-sticky-note"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="sticky-button">
        <a class="nav-link" href="{{route('topic.create')}}">
            <button class="button-87" role="button"><i class="fa-solid fa-plus me-3"></i>add a note</button>
        </a>
    </div>

</x-layout>