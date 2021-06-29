<template>
  <div>
    <div class="col-lg-12 justify-content-center">
            <form class="card">
            <div class="card-body">
                <h3 class="card-title">{{ editmode ?  "Edit" : "New"}} Service</h3>
                <div class="row ">

                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Service Name" >
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mb-0">
                        <label class="form-label">Description</label>
                        <textarea rows="5" class="form-control" placeholder="Here can be your description" value=""></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary"> {{ editmode ?  "Update" : "Submit"}}  </button>
            </div>

        </form>
    </div>
  </div>
</template>

<script>
export default {
data()
    {
        return{
            editmode:false,
    };
 }
}
</script>

<style>

</style>
