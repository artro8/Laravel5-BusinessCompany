@extends('master')
@section('content')

        <section class="map">
          <div id="google-map" class="map_model"></div>
          <ul class="map_locations">
            <li data-x="21.1374901" data-y="51.401894">
              <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
            </li>
          </ul>
        </section>
        
        <section class="well1">
          <div class="container">
            <h2>Feedback</h2>
            <form method="post" action="bat/rd-mailform.php" class="mailform off2">
              <input type="hidden" name="form-type" value="contact">
              <fieldset class="row">
                <label class="grid_4">
                  <input type="text" name="name" placeholder="Your Name:" data-constraints="@LettersOnly @NotEmpty">
                </label>
                <label class="grid_4">
                  <input type="text" name="phone" placeholder="Telephone:" data-constraints="@Phone">
                </label>
                <label class="grid_4">
                  <input type="text" name="email" placeholder="Email:" data-constraints="@Email @NotEmpty">
                </label>
                <label class="grid_12">
                  <textarea name="message" placeholder="Message:" data-constraints="@NotEmpty"></textarea>
                </label>
                <div class="mfControls grid_12">
                  <button type="submit" class="btn">Sumbit comment</button>
                </div>
              </fieldset>
            </form>
          </div>
        </section>
@stop