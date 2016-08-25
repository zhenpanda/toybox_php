<div id="formBG">
    <div id="form" class="container-fluid">
      <div class="row-fluid" id="form-top">
        <div class="col-xs-12 no-gut" id="form-left">
          <p class="form-text">Are you a current patient of Sunshine Group?</p>
          <form id="paitent-form">
            <input type="radio" name="radio-form" value="Yes"> Yes
            <input type="radio" name="radio-form" value="No"> No
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
              <option value="one">Subject *</option>
              <option value="two">Two</option>
            </select>

            <textarea type="input-text" class="input" id="comments-area" placeholder="Comments *"></textarea>

            <select id="heard" class="input form-control">
              <option value="one">How did you heard about us? *</option>
              <option value="two">Two</option>
            </select>

            <input type="input-text"  class="input" id="details" required="required" />
            <label for="details" id="details-placeholder">Additional referral details </label>

          </form>
        </div>
      </div>
    </div>
</div>
