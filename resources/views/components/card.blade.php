<div class="card mb-4">
    <div class="card-header ">
        <h3 class="card-title">{{ ($title) ?? '' }}</h3>
        <div class="card-tools">{{ ($option) ?? '' }}</div>
    </div>
    <div class="card-body"> 
    	{{ $slot }}
    </div>
</div>