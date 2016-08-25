<div id="formBG">
    <div id="form" class="container-fluid">
      <div class="row-fluid" id="form-top">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-gut" id="form-left">
          <p id="form-text">Are you a current patient of Sunshine Group? <span class="star">*</span></p>
          <form id="paitent-form">
            <input type="radio" name="radio-form" id="form-yes" value="Yes"> Yes
            <input type="radio" name="radio-form" id="form-no"value="No"> No
          </form>
          <form id="form-main">
            <input type="input-text" class="input" id="first-name" required="required" />
            <label for="first-name" id="first-name-placeholder">First Name </label>

            <input type="input-text"  class="input" id="last-name" required="required" />
            <label for="last-name" id="last-name-placeholder">Last Name </label>

            <input type="input-text"  class="input" id="email" required="required" />
            <label for="email" id="email-placeholder">Email </label>

            <input type="input-text"  class="input" id="phone" required="required" />
            <label for="phone" id="phone-placeholder">Phone </label>

            <select id="subject" class="input form-control">
              <option hidden>Subject *</option>
              <option value="one">A</option>
              <option value="two">B</option>
              <option value="three">C</option>
            </select>

            <textarea type="input-text" class="input" id="comments-area" placeholder="Comments *"></textarea>

            <select id="heard" class="input form-control">
              <option hidden>How did you heard about us? *</option>
              <option value="one">E</option>
              <option value="two">F</option>
              <option value="three">G</option>
            </select>

            <input type="input-text"  class="input" id="details" required="required" />
            <label for="details" id="details-placeholder">Additional referral details </label>

          </form>
          <div id="desktop-form-tail">
            <p id="require-text"><span class="star">*</span> Fields are required</p>
            <button type="button" class="btn" id="send-btn">SEND</button>

            <p class="hidden-xs hidden-sm" id="text-block">Please be aware that we cannot ensure that communications sent over the Internet are secure. This includes correspondence sent through this form or by email. If you are uncomfortable with such risks, you may contact us by phone instead of using this form. Do not include any Confidential Health information.</p>
          </div>
          <!-- Mobile display only -->
          <div class="hidden-md hidden-lg">
            <div class="form-tail">
              <p id="office-text">Office: </p>
              <div id="mobile-map">
                <img src="assets/imgs/mobile-map.png" alt=""/>
              </div>
            </div>
          </div>
        </div>
        <!-- Desktop display only -->
        <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4 no-gut hidden-xs hidden-sm" id="form-right">
          <div class="form-tail">
            <p id="office-text">Office: </p>
            <div id="desktop-map">
              <img src="assets/imgs/desktop-map.png" alt=""/>
            </div>
            <p id="location-text">Sunshine Group Health, P.A. 100 Left Avenue, Sunchine, NY</p>
            <p id="tel-phone-text">Tel 800-777-2424</p>
        </div>
      </div>
    </div>
  </div>
</div>
