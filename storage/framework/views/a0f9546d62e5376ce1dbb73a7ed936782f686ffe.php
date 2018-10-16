<?php $__env->startSection("content"); ?>

    
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                <p>A free and open source Bootstrap 4 admin template</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>


        <router-link :to="{name:'home'}" class="btn btn-dark">Home</router-link>
        
        <router-link :to="{name:'about'}"  class="btn btn-dark">About</router-link>
        <router-link :to="{name:'contact'}"  class="btn btn-dark">Contact</router-link>
        <router-link :to="{name:'showData'}"  class="btn btn-dark">show</router-link>

        <router-view></router-view>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>