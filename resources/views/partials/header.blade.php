<header>
        <div class="container  ">
            <div class="d-flex justify-content-between">
                <div class=" py-3"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"></div>
                <div class="d-flex align-items-center">
                    <ul class="text-uppercase d-flex align-items-center h-100 mb-0 ">
                        
                        @foreach ($menuList as $menu)
                        <li>    
                            <a href="{{ $menu['path'] }}">{{ $menu['name'] }}</a>
                        </li>
                        @endforeach
                        
                    </ul>

                </div>
            </div>
        </div>
        <div class="jumbo">

        </div>
    </header>

<style>
    <style lang="scss" scoped>
@use '../styles/partials/variables' as *;

header {
    background-color: $headerbg;
    
    li {
        border-bottom: 3px solid transparent;
        margin: 0 10px;
        align-items: center;
        &:hover {
            border-bottom: 3px solid $headeranchorover;
            a {
                color: $headeranchorover;
            }
        }
    }
        a {
            color: black;
            
            font-weight: bold;
           
        }
    
}
</style>
