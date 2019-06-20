<!-- <div class="container"> -->
    <div class="form-group">
        <input type="hidden" name="DNEID" value="<?=$DNEID?>">
        <input type="hidden" name="reqID" value="<?=$reqID?>">

        <label for="req-form-title">Title</label>
        <input type="text" class="form-control" id="req-form-title" name="title" value="<?=$title?>">

        <label for="req-form-category">Category</label>
        <input type="text" class="form-control" id="req-form-category" name="category" value="<?=$category?>" >

        <label for="req-form-reqDate">Required date</label>
        <input type="date" class="form-control" id="req-form-reqDate" name="reqdate" value="<?=$requiredDate?>">

        <label for="req-form-donated">Ammount donated</label>
        <input type="number" class="form-control" id="req-form-donated" name="donatedAmmount" value='<?=$donatedAmmount?>'>

        <label for="req-form-donated">Description</label>
        <textarea cols="" rows="5" class="form-control" id="req-form-description" name="description"><?=$description?>  </textarea>
        
    </div>
<!-- </div> -->