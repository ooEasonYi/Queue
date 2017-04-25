<template>
    <div class="videoplayer-wrap">
        <div class="player-contorl">
            <video id="playerVideo" class="video-js"></video>
            <!-- <video id="uniqueID" class="video-js" controls preload="auto" width="375" height="200" poster="https://peach.blender.org/wp-content/uploads/bbb-splash.png?3016dc" data-setup='{}'>
                <source src="http://www.papa52.info/staticResource/vipZone/489/1492398688951fj6JCI.mp4" type="video/mp4">
            </video> -->
        </div>
        <div class="other-video">
        </div>
    </div>
</template>
<script>
import videojs from 'video.js';
import 'video.js/dist/video-js.css';
import 'video.js/dist/lang/zh-CN'
import '../assets/video-skin.css';
export default {
    name: 'videoplayer',
    data() {
        return {
            playerVideo: null,
            playerOptions: {
                autoplay: false,
                controls: true,
                height: document.body.clientWidth * 0.618,
                width: document.body.clientWidth,
                poster: "http://www.papa52.info/staticResource/vipZone/481/1492401474536nkRIxs.png",
                // src: "http://www.papa52.info/staticResource/vipZone/489/1492398688951fj6JCI.mp4",
                language: "zh-CN",
                // nativeControlsForTouch:true,
                sources: [{
                    src: 'http://www.52papa.info/staticResource/vipZone/513/14925909443834RfIBe.mp4',
                    type: 'video/mp4'
                }],
                // components: {
                //     // playToggle: {},
                //     // fullscreenToggle: {},
                //     currentTimeDisplay: {},
                //     timeDivider: {},
                //     durationDisplay: {},
                //     //remainingTimeDisplay: {}, REMOVED
                //     progressControl: {},
                //     volumeControl: {},
                //     muteToggle: {}
                // }
                // controlBar: {
                //     muteToggle: false,
                //     currentTimeDisplay:true,
                //     fullscreenControl:false
                // }
                // children: {
                //     controlBar: {
                //         // DurationDisplay: false,
                //         // FullscreenToggle: false,
                //         // volumePanel: {
                //         //     inline: false
                //         // }
                //     }
                // },http://10.14.2.15/bber/heartbeat/pemissionVideo?token=VBiDBeEro;

            }
        }
    },
    mounted() {
        this.playerVideo = videojs("playerVideo", this.playerOptions,()=>{
				console.log(this.playerVideo.controlBar);
				this.playerVideo.controlBar.volumeMenuButton.hide();
				this.playerVideo.controlBar.timeDivider.show();
				this.playerVideo.play();
        });
        
    }
}
</script>
<style lang="scss" scoped>
.videoplayer-wrap {
    .player-contorl {
        width: 100%;
        height: 10rem;
        position: relative;
    }
    .other-video {
        width: 100%;
    }
}
</style>
