<template>
<div>
<div class="table-responsive">
  <table class="table table-vcenter table_custom spacing5 border-style mb-0">
   <thead>
      <tr>
         <th class="w40">#</th>
         <th>Name</th>
         <th>Description</th>
         <th>Created At</th>
         <th class="w40">Action</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>
            <span class="avatar avatar-pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">GH</span>
         </td>
         <td>Michelle Green</td>
         <td>Description</td>
         <td><span>date</span></td>


         <td>
            <div class="item-action dropdown">
               <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
               <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(18px, 25px, 0px);">
                  <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                  <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>

               </div>
            </div>
         </td>
      </tr>

   </tbody>
</table>
</div>

</div>
</template>

<script>
props:['services']
export default {

}
</script>

<style>

</style>
