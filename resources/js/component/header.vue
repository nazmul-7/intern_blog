<template>
    <div >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <router-link to="/" class="nav-link"   >
                        Home <span class="sr-only">(current)</span>
                    </router-link>
                </li>
                <li class="nav-item active">
                    <router-link to="/add_product" class="nav-link"   >
                        Add Product <span class="sr-only">(current)</span>
                    </router-link>
                </li>
                <li class="nav-item active">
                    <router-link to="/category" class="nav-link"   >
                        All Category <span class="sr-only">(current)</span>
                    </router-link>
                </li>
                <li class="nav-item">
                     <router-link to="/about" class="nav-link"   >
                        About 
                    </router-link>
                </li>
                <template v-if="isLoggedIn">
                     <li class="nav-item">
                        <a href="/logout"  class="nav-link" >Logout</a>
                    </li>
                </template>
                <template v-else>
                     <li class="nav-item">
                        <router-link to="/login" class="nav-link"   >
                            Login 
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/registration" class="nav-link"   >
                            Registration 
                        </router-link>
                    </li>
                </template>
               
               
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>


export default {
  
  created(){
     
  },

}
</script>