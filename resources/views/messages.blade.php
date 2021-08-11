<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="https://peepi.com.br/wp-content/uploads/2020/05/logo-peepi-oficial-1536x404.png.webp"
                                class="rounded float-start img-fluid img-chat me-2" alt="Peepi">
                        </h5>
                    </div>
                    <div class="card-body" id="chat-messages">
                        
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="d-flex" method="post" action="/messages" id="form-chat">
                            <input autofocus class="form-control me-2" type="search" id="input-message" name="message" placeholder="Message" aria-label="Search">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-outline-success" type="submit" id="send">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
