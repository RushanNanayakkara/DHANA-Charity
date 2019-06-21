<div class="form-group">
        <input type="hidden" name="DonationID" value="<?=$DonationID?>">
        <input type="hidden" name="DNRID" value="<?=$DNRID?>">
        <input type="hidden" name="ReqID" value="<?=$ReqID?>">

        <label for="donation-form-title">Title</label>
        <input type="text" class="form-control" id="donation-form-title" name="title" value="<?=$Title?>">

        <label for="donation-form-category">Category</label>
        <input type="text" class="form-control" id="donation-form-category" name="category" value="<?=$category?>" >
        
        <label for="donation-form-donated">Amount</label>
        <input type="number" class="form-control" id="donation-form-donated" name="Amount" value='<?=$Amount?>'>

        <label for="donation-form-reqDate">Donation date</label>
        <input type="date" class="form-control" id="donation-form-reqDate" name="DonationDate" value="<?=$DonationDate?>">

        <label for="donation-form-donated">Note</label>
        <textarea cols="" rows="5" class="form-control" id="donation-form-description" name="Note"><?=$Note?></textarea>
        
        <label for="donation-form-state">State</label>
        <input type="text" class="form-control" id="donation-form-state" name="DonationState" value="<?=$DonationState?>" >
        
</div>