<div>
    <div style="text-align: center">

        <div class="input-group mb-3">
            <select style="width: 15%" wire:model="curr_first">
                @foreach($currency as $key=>$value)
                    <option value="{{$value}}">{{$key}}</option>
                @endforeach
            </select>
            <input wire:model="summ_first" style="width: 45%"
                   class="form-control @error('summ_first')is-invalid @enderror" type="text">
            @error('summ_first')

            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="input-group mb-3">

            <select style="width: 15%" aria-label=".form-select-lg" wire:model="curr_second">
                @foreach($currency as $key=>$value)
                    <option value="{{$value}}">{{$key}}</option>
                @endforeach
            </select>
            <input wire:model="summ_second" class="form-control @error('summ_second')is-invalid @enderror" type="text">
            @error('summ_second')

            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>


    </div>
</div>
