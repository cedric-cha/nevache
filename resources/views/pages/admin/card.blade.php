<div class="row row-cols-1 row-cols-md-2 g-4">
  @isset($properties[12])
    <div class="col-md-3 mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[12]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[12]->titre }}</h5>
          <p class="card-text">{{ $properties[12]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[12]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[12]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset

  @isset($properties[13])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[13]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[13]->titre }}</h5>
          <p class="card-text">{{ $properties[13]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[13]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[13]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
  
  @isset($properties[14])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[14]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[14]->titre }}</h5>
          <p class="card-text">{{ $properties[14]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[14]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[14]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset

  @isset($properties[15])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[15]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[15]->titre }}</h5>
          <p class="card-text">{{ $properties[15]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[15]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[15]->id) }}" onsubmit="return confirm('Confirmer la suppression ?');" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="confirm('')" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset

</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  @isset($properties[0])
    <div class="col-md-3 mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[0]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[0]->titre }}</h5>
          <p class="card-text">{{ $properties[0]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[0]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[0]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
  
  @isset($properties[1])
    <div class="col-md-3 mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[1]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[1]->titre }}</h5>
          <p class="card-text">{{ $properties[1]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[1]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[1]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset

  @isset($properties[2])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[2]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[2]->titre }}</h5>
          <p class="card-text">{{ $properties[2]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[2]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[2]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
  
  @isset($properties[3])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[3]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[3]->titre }}</h5>
          <p class="card-text">{{ $properties[3]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[3]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[3]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  @isset($properties[4])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[4]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[4]->titre }}</h5>
          <p class="card-text">{{ $properties[4]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[4]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[4]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset

  @isset($properties[5])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[5]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[5]->titre }}</h5>
          <p class="card-text">{{ $properties[5]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[5]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[5]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset

  @isset($properties[6])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[6]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[6]->titre }}</h5>
          <p class="card-text">{{ $properties[6]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[6]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[6]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
  
  @isset($properties[7])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[7]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[7]->titre }}</h5>
          <p class="card-text">{{ $properties[7]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[7]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[7]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">

  @isset($properties[8])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[8]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[8]->titre }}</h5>
          <p class="card-text">{{ $properties[8]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[8]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[8]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
  
  @isset($properties[9])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[9]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[9]->titre }}</h5>
          <p class="card-text">{{ $properties[9]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[9]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[9]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
  
  @isset($properties[10])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[10]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[10]->titre }}</h5>
          <p class="card-text">{{ $properties[10]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[10]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[10]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
  
  @isset($properties[11])
    <div class="col-md-3  mb-2">
      <div class="card">
        <img src="{{ url('storage/img/'.$properties[11]->image) }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $properties[11]->titre }}</h5>
          <p class="card-text">{{ $properties[11]->description }}</p>
          <div class="text-center">
            <a href="{{ url('edit-property', $properties[11]->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
            <!-- <form id="delete-form" action="{{ route('delete', $properties[11]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  @endisset
</div>