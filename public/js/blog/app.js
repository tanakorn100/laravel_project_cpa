$(document).ready(function(){
  $('.addComment').click(function(){
    var blog_id = $(this).attr('blog_id');
    $('#blog_id').val(blog_id);
    $('.modal').modal('show');
  });
});
