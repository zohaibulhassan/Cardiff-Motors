<div class="filters">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <div class="form">
                    <form action="{{url('/searchModels')}}" method="post">
                        @csrf
                        <div class="select">
                            <select class="form-control" name="make" id="make">
                                <option value="">--Make--</option>         
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="select">
                            <select class="form-control" name="model" id="model">
                                <option value="">--Model--</option>
                            </select>
                        </div>
                        <div class="select">
                            <select class="form-control" name="price" id="price">
                                <option>Any Price</option>
                                <option value="0,10000">Up to £10,000</option>
                                <option value="0,20000">Up to £20,000</option>
                                <option value="0,30000">Up to £30,000</option>
                                <option value="0,40000">Up to £40,000</option>
                                <option value="0,50000">Up to £50,000</option>
                                <option value="0,100000">Up to £100,000</option>
                                <option value="0,200000">Up to £200,000</option>
                                <option value="0,300000">Up to £300,000</option>
                                <option value="0,400000">Up to £400,000</option>
                                <option value="0,500000">Up to £500,000</option>
                                <option value="0,600000">Up to £600,000</option>
                                <option value="0,700000">Up to £700,000</option>
                                <option value="0,800000">Up to £800,000</option>
                                <option value="0,900000">Up to £900,000</option>
                                <option value="0,1000000">Up to £1,000,000</option>
                              </select>
                        </div>
                        <button type="submit">Find Vehicle</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Fetch models based on selected brand
        $('#make').change(function() {
            var brandId = $(this).val();
            $('#model').html('<option value="">Model</option>'); // Reset model dropdown
            
            if (brandId) {
                // Send an AJAX request to fetch models based on the selected brand
                $.ajax({
                    url: '{{ url("/fetchModels") }}',
                    type: 'POST',
                    data: { brandId: brandId, _token: '{{ csrf_token() }}' },
                    success: function(response) {                  
                        if (response.models.length > 0) {
                            // Populate model dropdown with fetched models
                            $.each(response.models, function(key, model) {
                                $('#model').append('<option value="' + model.id + '">' + model.name + '</option>');
                            });
                        }
                    }
                });
            }
        });
    });
</script>
