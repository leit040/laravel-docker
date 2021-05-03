<div>

    <div class="main">
        <div class="row">
            <div class="col-1">
                <select class="form-select" @if($errors->has('summ_first') || $errors->has('summ_second')) disabled @endif wire:model="curr_first" >
                    @foreach($currency as $key=>$value)
                        <option value="{{$value}}">{{$key}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-2 gx-5">
                <input wire:model="summ_first" class="form-control @error('summ_first')is-invalid @enderror" type="text">
                    @error('summ_first')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
            </div>

            <div class="col-1">
                <select  class="form-select" @if($errors->has('summ_first') || $errors->has('summ_second')) disabled @endif wire:model="curr_second">
                    @foreach($currency as $key=>$value)
                        <option value="{{$value}}">{{$key}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-2">
                <input wire:model="summ_second" class="form-control @error('summ_second')is-invalid @enderror" type="text">
                    @error('summ_second')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
            </div>
        </div>

    </div>
</div>
