@foreach ($fetch_data as $item_fetch)
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="txt_name">Name</label>
            <input type="text" name="txt_name" id="txt_name" value="{{ $item_fetch->name }}" class="form-control" readonly required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="txt_phone">Phone Number</label>
            <input type="number" name="txt_phone" id="txt_phone" value="{{ $item_fetch->phone_num }}" class="form-control" readonly required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="txt_address">Address</label>
            <textarea name="txt_address" id="txt_address" cols="5" rows="2" class="form-control" style="resize: none;" readonly>{{ $item_fetch->address }}</textarea>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="txt_role">User Role</label>
            <select name="txt_role" id="txt_role" class="form-control select2bs4">
                <option value="" disabled selected>
                    @if ($item_fetch->user_level == 1)
                        Administrator
                    @else
                        Standar User
                    @endif
                </option>
                
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="txt_email">Email</label>
            <input type="email" name="txt_email" id="txt_email" class="form-control" value="{{ $item_fetch->email }}" required readonly>
        </div>
    </div>
</div>    
@endforeach
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    });
</script>