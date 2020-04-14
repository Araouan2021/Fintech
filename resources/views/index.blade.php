<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h1 style="text-align: center; color: DarkRed; font-size: 75px; font-family: 'Questrial', sans-serif;, sans-serif; font-weight: bold;">Pantry</h1>
      <h3 style="color: SaddleBrown; font-family: 'Allura', cursive; font-size: 40px;">Showing Recipes For: &nbsp; ingredients </h3>
      <hr>
      @foreach($recipes as $recipe)
        <div class="recipe-details">
        <a href="{{route('recipes', 'recipe->file')}}">       
        <img src="{{ asset('storage/logos/' . $recipe->image)}}"
             class="img-responsive img-thumbnail">
             <p>{{ $recipe->size }}</p>
        </a>
          <h2 style="color: DarkRed; font-size: 40px; font-family: 'Khand', sans-serif;"></u>Title<br></h2>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;""><u>Ingredients</u><br></p>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Method</u><br></p>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Serving size</u><br></p>
          <p style="font-family: 'Molengo', sans-serif; font-size: 15px;"><u>Time</u><br></p>
        </div>
        </div>
      @endforeach
