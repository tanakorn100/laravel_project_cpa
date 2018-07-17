$(document).ready(function(){
  $('.addComment').click(function(){
    var blog_id = $(this).attr('blog_id');
    $('#blog_id').val(blog_id);
    $('.modal').modal('show');
  });
});

$(document).ready(function(){
  $('.playMusic').click(function(){
    var cover_album = $(this).attr('cover_album');
    var music = $(this).attr('music');
    $('#music').val(music);
    $('#cover_album').val(cover_album);
    $('.footer').navbar('show');
  });
});
