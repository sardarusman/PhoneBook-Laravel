@extends ('Layout')

@section ('content')
 <section id="inner" class="inner-section section">
        <div class="container">

            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Contacts</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="wow fadeIn" data-wow-duration="1s">Add your contacts here.</p>
                </div>
            </div>

            <div class="inner-wrapper row">
                <div class="col-md-12">

                      @include ('parts/flash')

                    <form name="frm" id="frm" action="{{  url('contacts/create') }}" method="post" class="col-md-6 col-md-offset-3">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                       <!-- fName -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" maxlen="255" id="name" placeholder="Enter First first name" value="{{ old('name') }}" />
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control" maxlen="255" id="phone" placeholder="Enter Phone" value="{{ old('phone') }}" />
                    </div>


                        <!-- Description -->
                        <div class="form-group">
                            <label for="description">Notes </label>
                            <textarea name="notes" id="notes" class="form-control" placeholder="Enter notes (maximum character limit : 255)">{{ old ('notes') }}</textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Add Contact</button>
                    </form>

                </div>
            </div>

        </div>
    </section>

@stop