<div class="banner">
    <video src="assets/video/video.mp4" muted autoplay loop type="mp4"></video>
    <div class="textbox">
        <h3> <span>M</span>all <span>o</span>f <span>S</span>ocial <span>m</span>edia</h3>
        <p>"Trusted by the locals"</p>
        <a class="lightbtn" href="">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Read More
        </a>
    </div>
    <div class="videoBx">
        <video class="videobox" src="assets/video/video.mp4" muted autoplay loop type="mp4"></video>
    </div>

</div>
<script>
	let video = document.querySelector('video');
    let textbox = document.querySelector('.textbox');
    let videobox = document.querySelector('.videoBx');
    let banner = document.querySelector('.banner');
	window.addEventListener('scroll', function() {
		let value = 0.1+window.scrollY/-600;
		video.style.opacity = value;
        let t = 1+window.scrollY/-600;
		textbox.style.opacity = t;	
		videobox.style.opacity = t;
		banner.style.opacity = t;		
	})
</script> 