<div id="formBG">
    <div id="form" class="container-fluid">
      <div class="row-fluid" id="form-top">

        <div class="col-xs-12 col-sm-7 no-gut" id="form-left">
          <p id="form-text">Are you a current patient of Sunshine Group? <span class="star">*</span></p>
          <form id="paitent-form">
            <input type="radio" name="radio-form" id="form-yes" value="Yes"> Yes
            <input type="radio" name="radio-form" id="form-no"value="No"> No
          </form>
          <form id="">
            <input type="input-text" class="input" id="first-name" required="required" />
            <label for="first-name" id="first-name-placeholder">First Name </label>

            <input type="input-text"  class="input" id="last-name" required="required" />
            <label for="last-name" id="last-name-placeholder">Last Name </label>

            <input type="input-text"  class="input" id="email" required="required" />
            <label for="email" id="email-placeholder">Email </label>

            <input type="input-text"  class="input" id="phone" required="required" />
            <label for="phone" id="phone-placeholder">Phone </label>

            <select id="subject" class="input form-control">
              <option value="">Subject *</option>
              <option value="one">Subject One</option>
              <option value="two">Subject Two</option>
            </select>

            <textarea type="input-text" class="input" id="comments-area" placeholder="Comments *"></textarea>

            <select id="heard" class="input form-control">
              <option value="">How did you heard about us? *</option>
              <option value="one">Choice 1</option>
              <option value="two">Choice 2</option>
            </select>

            <input type="input-text"  class="input" id="details" required="required" />
            <label for="details" id="details-placeholder">Additional referral details </label>

          </form>
        </div>
        <div class="col-xs-0 col-sm-5 no-gut" id="form-right">

        </div>
      </div>
    </div>
</div>
