                    <div class="wrapper wrapper--w680">
                        <div class="card card-1">
                            <div class="card-body">
                                 <h2 class="title">Lupa Password</h2> 

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="input-group">

                                        <input id="email" class="input--style-1" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                    <div class="p-t-20">
                                        <button class="btn btn--radius btn--green" type="submit">Submit</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>