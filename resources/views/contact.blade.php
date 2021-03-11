@extends('layouts.marketing-layout')

@section('content')
    <div 
        class="mx-auto"
        style="
            padding: 50px;
            max-width: 450px;
        "
    >
        <div>
            <form
                action="/contact"
                method="POST"
            >
                @csrf

                <h4 class="mb-10 text-center">Contact Me</h4>

                <div class="mb-10">
                    <input 
                        type="text" 
                        name="name"
                        class="form-control" 
                        placeholder="Name..."
                        maxlength="100" 
                        required
                    />
                </div>

                <div class="mb-10">
                    <input
                        type="email" 
                        name="email"
                        class="form-control" 
                        placeholder="Email address"
                        maxlength="100" 
                        required
                    />
                </div>

                <div>
                    <textarea 
                        name="message"
                        class="form-control" 
                        placeholder="You Message"
                        required
                        rows="5"
                        maxlength="255"
                    /></textarea>
                </div>
                <br>

                <div>
                    <button 
                        type="submit"
                        class="btn btn-info"
                        style="width:100%"
                    >SUBMIT</button>
                </div>
            </form>                            
        </div>
    </div>
@endsection