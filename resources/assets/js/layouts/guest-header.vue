<template>
<div>
   <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="sticky-footer-navbar.1#"><img src="/images/logo.png" alt="RUBIK"/></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="sticky-footer-navbar.1#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sticky-footer-navbar.1#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="sticky-footer-navbar.1#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
     
</div>
</template>


<script>
    export default { }
</script>

<style scoped>
.fdb-block {
	  border-bottom: solid 1px rgb(5, 5, 5);
}
.nav-link {
	color: white;
}
</style>
