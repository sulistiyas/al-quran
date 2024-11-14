@foreach ($edit_data as $item_data)
    <form action="{{ route('update_users',['id'=>$item_data->id]) }}" method="POST" enctype="multipart/form-data" id="users" name="users">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="txt_name">Name</label>
                    <input type="text" name="txt_name" id="txt_name" value="{{ $item_data->name }}" class="form-control" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="txt_phone">Phone Number</label>
                    <input type="number" name="txt_phone" id="txt_phone" value="{{ $item_data->phone_num }}" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="txt_address">Address</label>
                    <textarea name="txt_address" id="txt_address" cols="5" rows="2" class="form-control" style="resize: none;">{{ $item_data->address }}</textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="txt_role">Job Status</label>
                    <select name="txt_role" id="txt_role" class="form-control select2bs4" required >
                        <option value="" disabled>- Select Role -</option>
                        <option value="0" {{ $item_data->user_level == "0" ? 'selected' : '' }}>Administrator</option>
                        <option value="1" {{ $item_data->user_level == "1" ? 'selected' : '' }}>Standar User</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
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