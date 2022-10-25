<style>
    .letraname{
        background-color: orange;
        color: white;
        border-radius: 50%;
    }
</style>
<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        

        <li class="notification-list">
            <a class="nav-link end-bar-toggle mt-3"  href="javascript: void(0);">
                <i class="dripicons-gear noti-icon"></i>
            </a>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span >
                    <span class="account-user-name flex pt-2" style="max-width: 150px; text-overflow:ellipsis; overflow:hidden" ><?php echo  ucwords(strtolower($nombre)). ' '. ucwords(strtolower($apellido)) ?></span>
                </span>
                <span class="account-user-avatar m-1 mt-2 " >
                    <div class="letraname  text-center " style="width: 45px; height:45px; font-size:30px !important; line-height:47px"><?php echo strtoupper(substr($nombre,0,1 )); ?></div>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Bienvenido !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>Mi cuenta</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-edit me-1"></i>
                    <span>Configuracion</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-lifebuoy me-1"></i>
                    <span>Soporte</span>
                </a>


                <!-- item-->
                <a href="config/singout" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Cerrar sesion</span>
                </a>
            </div>
        </li>

    </ul>
    <button class="boton-open mt-2  btn">
        <i class="mdi mdi-menu h2"></i>
    </button>
    <script>
        
        document.querySelector('.boton-open').addEventListener('click', ()=>{
            if(localStorage.getItem('menu') != 'sidebar-enable'){
                localStorage.setItem('menu','sidebar-enable');
            }else{
                localStorage.setItem('menu','');
            }
            verificar()
        })
        function verificar(){
            if(localStorage.getItem('menu') == 'sidebar-enable'){
                document.querySelector('body').classList.add('sidebar-enable');
                document.querySelector('body').setAttribute('data-leftbar-compact-mode','condensed');
            }else{
                document.querySelector('body').classList.remove('sidebar-enable');
                document.querySelector('body').setAttribute('data-leftbar-compact-mode','');
            }
        }
        window.onload=function() {
			verificar()
		}
        
        
        
    </script>

    <!-- end Topbar -->
</div>