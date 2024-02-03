<!DOCTYPE html>
<html>
  <head>
    <title>Furnace - the chiptune tracker</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="theme-color" content="#303030"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/png" href="/taicon.png"/>
    <link rel="apple-touch-icon" href="/taicon192.png"/>
    <meta name="msapplication-TileImage" content="/taicon192.png"/>
    <link href="/furnace/style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="furheader">
    </div>
    <div class="furbanner">
      <video autoplay loop muted>
        <source src="/furnace/assets/furbg1.mp4" type="video/mp4"/> 
      </video>
      <div class="furbannertext">
        <div class="furbannerlogo">
          <img class="furbannerlogo1" src="/furnace/assets/logo3.png" alt="Furnace"/>
          <img class="furbannerlogo2" src="/furnace/assets/logoword.png" alt="Furnace"/>
        </div>
        <p>
        the ultimate chiptune music tracker.
        </p>
      </div>
    </div>
    <div class="furdivflex flexL">
      <img class="furdivleft" src="/furnace/assets/placeholder.png" alt="placeholder"/>
      <div class="furdivright">
      <h1>system and sound chip galore.</h1>
      <p>supports nearly every old-school 8-bit/16-bit system out there! from the Atari 2600 and Commodore PET to SNES, Genesis and arcades, you'll feel at home with the vast selection of systems Furnace supports.</p>
      <div class="fursub">
        <input type="checkbox" id="chips" name="source code"/>
        <label for="chips">want to see more? click here.</label>
        <div class="furhide">
          <p>Furnace allows you to use the following chips:</p>
          <ul>
            <li>YM2151 (OPM)</li>
            <li>YM2203 (OPN)</li>
            <li>YM2413 (OPLL)</li>
            <li>YM2414 (OPZ) used in Yamaha TX81Z</li>
            <li>YM2608 (OPNA) used in PC-98</li>
            <li>YM2610 (OPNB) used in Neo Geo</li>
            <li>YM2610B (OPNB2)</li>
            <li>YM2612 (OPN2) used in Sega Genesis and FM Towns</li>
            <li>YM3526 (OPL) used in C64 Sound Expander</li>
            <li>YM3812 (OPL2)</li>
            <li>YMF262 (OPL3) with full 4-op support!</li>
            <li>ESS ESFM</li>
            <li>Y8950 (OPL with ADPCM)</li>
            <li>AY-3-8910/YM2149(F) used in several computers and game consoles</li>
            <li>Commodore VIC used in the VIC-20</li>
            <li>Microchip AY8930</li>
            <li>TI SN76489 used in Sega Master System and BBC Micro</li>
            <li>PC Speaker</li>
            <li>Philips SAA1099 used in SAM Coupé</li>
            <li>OKI MSM5232 used in some arcade boards</li>
            <li>SNES</li>
            <li>Amiga</li>
            <li>SegaPCM - all 16 channels</li>
            <li>Capcom QSound</li>
            <li>Yamaha YMZ280B (PCMD8)</li>
            <li>Ricoh RF5C68 used in Sega CD and FM Towns</li>
            <li>OKI MSM6258 and MSM6295</li>
            <li>Konami K007232</li>
            <li>Konami K053260</li>
            <li>Irem GA20</li>
            <li>Ensoniq ES5506</li>
            <li>Namco C140</li>
            <li>Namco C219</li>
            <li>HuC6280 used in PC Engine</li>
            <li>Konami Bubble System WSG</li>
            <li>Konami SCC/SCC+</li>
            <li>Namco arcade chips (WSG/C15/C30)</li>
            <li>WonderSwan</li>
            <li>Seta/Allumer X1-010</li>
            <li>Sharp SM8521 used in Tiger Game.com</li>
            <li>NES/Famicom (Ricoh 2A03/2A07)</li>
            <li>Konami VRC6</li>
            <li>Konami VRC7</li>
            <li>MMC5</li>
            <li>Famicom Disk System</li>
            <li>Sunsoft 5B</li>
            <li>Namco 163</li>
            <li>SID (6581/8580) used in Commodore 64</li>
            <li>Mikey used in Atari Lynx</li>
            <li>ZX Spectrum beeper (SFX-like and QuadTone engines)</li>
            <li>Pokémon Mini</li>
            <li>Commodore PET</li>
            <li>TED used in Commodore Plus/4</li>
            <li>Casio PV-1000</li>
            <li>TIA used in Atari 2600</li>
            <li>POKEY used in Atari 8-bit computers</li>
            <li>Game Boy</li>
            <li>Virtual Boy</li>
            <li>Commander X16 VERA</li>
            <li>tildearrow Sound Unit</li>
            <li>PowerNoise</li>
            <li>Generic PCM DAC</li>
          </ul>
          <p>...and yes! you can target many systems and combinations of these, such as:</p>
          <ul>
            <li>Sega Genesis</li>
            <li>Sega Master System</li>
            <li>Game Gear</li>
            <li>Game Boy</li>
            <li>Neo Geo Pocket</li>
            <li>PC Engine/TurboGrafx-16</li>
            <li>NES/Famicom (including expansions)</li>
            <li>SNES</li>
            <li>Intellivision</li>
            <li>Vectrex</li>
            <li>Neo Geo</li>
            <li>Atari 2600</li>
            <li>Atari Lynx</li>
            <li>WonderSwan</li>
            <li>Virtual Boy</li>
            <li>Gamate</li>
            <li>Game.com</li>
            <li>PV-1000</li>
            <li>PET</li>
            <li>VIC-20</li>
            <li>Plus/4</li>
            <li>C64</li>
            <li>Amiga</li>
            <li>MSX (including expansions)</li>
            <li>PC-88 (including expansions)</li>
            <li>PC-98 (including expansions)</li>
            <li>ZX Spectrum</li>
            <li>Amstrad CPC</li>
            <li>Atari 800</li>
            <li>Atari ST</li>
            <li>SAM Coupé</li>
            <li>BBC Micro</li>
            <li>IBM PC (including expansions)</li>
            <li>Sharp X1</li>
            <li>Sharp X68000</li>
            <li>FM Towns</li>
            <li>Commander X16</li>
            <li>TI-99/4A</li>
            <li>Gyruss</li>
            <li>Bubble System</li>
            <li>Bally Midway MCR</li>
            <li>Sega System 1</li>
            <li>Sega Kyugo</li>
            <li>DefleCade (like Sega OutRun)</li>
            <li>Sega X Board</li>
            <li>Sega System 18</li>
            <li>Sega System 24</li>
            <li>Sega System 32</li>
            <li>CPS-1</li>
            <li>CPS-2</li>
            <li>NMK 16-bit Arcade</li>
            <li>Seta 1</li>
            <li>Seta 2</li>
            <li>Cave 68000</li>
            <li>Irem M72</li>
            <li>Irem M92</li>
            <li>Namco System 86</li>
            <li>Namco System 1</li>
            <li>Namco System 2</li>
            <li>Namco NA-1</li>
            <li>Taito Arcade</li>
            <li>Alpha-68K</li>
            <li>and many, <i>many</i> more!</li>
          </ul>
        </div>
      </div>
      </div>
    </div>
    <div class="furdivflex flexR">
      <img class="furdivleft" src="/furnace/assets/placeholder.png" alt="placeholder"/>
      <div class="furdivright">
      <h1>true, real-time sound engine.</h1>
      <p>every sound chip is emulated using many of the best emulation cores out there for a fantastic, true-to-hardware sound.</p>
      <div class="fursub">
        <input type="checkbox" id="sengine" name="source code"/>
        <label for="sengine">what? really?</label>
        <div class="furhide">
          <p>yes!</p>
        </div>
      </div>
      </div>
    </div>
    <div class="furdivflex flexL">
      <img class="furdivleft" src="/furnace/assets/placeholder.png" alt="placeholder"/>
      <div class="furdivright">
      <h1>DefleMask-compatible.</h1>
      <p>loads all your .dmf songs,* and even your instruments (.dmf)/wavetables (.dmw).<br/>on top of that, it also saves in these formats for interoperability! (besides Furnace's own .fur format)</p>
      <p style="font-size: 10px;">* from Beta 3 to 1.1.9. playback may differ slightly.</p>
      </div>
    </div>
    <div class="furdivflex flexR">
      <img class="furdivleft" src="/furnace/assets/placeholder.png" alt="placeholder"/>
      <div class="furdivright">
      <h1>one interface. infinite setups.</h1>
      <p>the most flexible and customizable tracker interface ever.<br/>every window can be arranged as you wish without restrictions.<br/>the color scheme is also customizable.</p>
      </div>
    </div>
    <div class="furdivflex flexL">
      <img class="furdivleft" src="/furnace/assets/placeholder.png" alt="placeholder"/>
      <div class="furdivright">
      <h1>export options.</h1>
      <p>Furnace supports exporting* your song as audio files (.wav), VGM files (covering over 80% of the VGM specification), and ZSM files (for Commander X16).</p>
      <p style="font-size: 10px;">* ROM export still not available, but it is planned for 0.7.</p>
      </div>
    </div>
    <div class="furdivflex flexR">
      <img class="furdivleft" src="/furnace/assets/placeholder.png" alt="placeholder"/>
      <div class="furdivright">
      <h1>free and open-source!</h1>
      <p>no, you're not dreaming. Furnace is licensed under GPLv2-or-later, which means you can examine the code and modify it to your liking.</p>
      </div>
    </div>
    <div class="furdiv">
      <h1>downloads</h1>
      <p style="text-align: center;">ready? select your operating system.</p>
      <div class="osbuttons">
        <div class="osbutton">
          <a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-win64.zip"><img class="furbutton" src="/storage/images/win.png" alt="Windows"/></a>
          <p>Windows (64-bit)</p>
        </div>
        <div class="osbutton">
          <a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-mac-Intel.dmg"><img class="furbutton" src="/storage/images/mac.png" alt="macOS"/></a>
          <p>macOS (Intel)</p>
        </div>
        <div class="osbutton">
          <a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-mac-arm64.dmg"><img class="furbutton" src="/storage/images/mac.png" alt="macOS"/></a>
          <p>macOS (Apple silicon)</p>
        </div>
        <div class="osbutton">
          <a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-linux-x86_64.tar.gz"><img class="furbutton" src="/storage/images/linux.png" alt="Linux"/></a>
          <p>Linux (x86_64)</p>
        </div>
      </div>
      <p style="text-align: center; color: #aaa;">latest version: 0.6.1 (2024-02-03)<br/><a href="https://github.com/tildearrow/furnace/releases/tag/v0.6.1">click for release notes (GitHub)</a></p>
      <div class="furspace">
	<div class="fursub">
          <input type="checkbox" id="altDownload" name="alternate downloads"/>
          <label for="altDownload">alternate downloads</label>
          <div class="furhide">
          <ul>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-win64.zip">Windows (64-bit)</a></li>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-win32.zip">Windows (32-bit; Vista or later)</a></li>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-win32-XP-ONLY.zip">Windows (32-bit; XP-only)</a></li>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-mac-Intel.dmg">macOS (64-bit Intel)</a></li>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-mac-arm64.dmg">macOS (Apple silicon)</a></li>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-linux-x86_64.tar.gz">Linux (x86_64; tar)</a></li>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/Furnace-0.6.1-x86_64.AppImage">Linux (x86_64; AppImage)</a></li>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-linux-armhf.tar.gz">Linux (32-bit ARM)</a></li>
            <li><a href="https://github.com/tildearrow/furnace/releases/download/v0.6.1/furnace-0.6.1-linux-aarch64.tar.gz">Linux (AArch64)</a></li>
          </ul>
          </div>
        </div>
        <div class="fursub">
          <input type="checkbox" id="src" name="source code"/>
          <label for="src">source code</label>
          <div class="furhide">
	    <p>you'll need <a href="https://git-scm.com/">Git</a> installed on your computer.</p>
            <p>use the following command to clone the Furnace repository, which contains source code and other assets:</p>
	    <div class="codeblock">
	      <code>
              git clone --recursive https://github.com/tildearrow/furnace.git
              </code>
            </div>
            <p>do not use the "Source code" option in the GitHub release page - it doesn't come with necessary submodules for compilation!</p>
          </div>
        </div>
        <div class="fursub">
          <input type="checkbox" id="packages" name="Unix/Linux/other packages"/>
          <label for="packages">Unix/Linux/other packages</label>
          <div class="furhide">
          <p>this list will be expanded gradually.</p>
          <ul>
            <li><b>Arch Linux</b>: install the <code>furnace</code> <a href="https://archlinux.org/packages/extra/x86_64/furnace/">package</a>.</li>
            <li><b>FreeBSD (ports)</b>: <a href="https://www.freshports.org/audio/furnace/">see this page.</a></li>
            <li><b>Flatpak</b>: <a href="https://flathub.org/apps/org.tildearrow.furnace">Furnace is available as a Flatpak.</a></li>
            <li><b>Void Linux</b>: install the <code>furnace</code> <a href="https://github.com/void-linux/void-packages/tree/master/srcpkgs/furnace">package</a>.</li>
          <!--
            <li><b>Haiku (ports)</b></li>
            <li><b>Nix</b></li>
            <li><b>openSUSE</b></li>
          -->
          </ul>
          </div>
        </div>
        <div class="fursub">
          <input type="checkbox" id="sysReq" name="system requirements"/>
          <label for="sysReq">system requirements</label>
          <div class="furhide">
            <table>
              <tr>
                <th></th>
                <th>minimum</th>
                <th>recommended</th>
              </tr>
              <tr>
                <td>operating system</td>
                <td>Windows XP; OS X 10.9; or Linux (from 2016 onwards)</td>
                <td>Windows Vista or later; macOS 10.15 or later; or Linux (recent distro)</td>
              </tr>
              <tr>
                <td>processor</td>
                <td>64-bit Intel (Core 2)/AMD (K10), 32-bit ARMv7 or 32-bit Intel (Pentium 3)/AMD (K7)</td>
                <td>64-bit Intel Core i5 (Ivy Bridge or later)/AMD (Zen) or 64-bit ARM (AArch64)</td>
              </tr>
              <tr>
                <td>memory</td>
                <td>768MB</td>
                <td>2GB or more</td>
              </tr>
              <tr>
                <td>storage</td>
                <td>16MB (program) + 200MB (config and backups)</td>
                <td>40MB (program and included assets) + 1GB (config and backups)</td>
              </tr>
              <tr>
                <td>graphics</td>
                <td>OpenGL 3.0, OpenGL ES 2.0 or DirectX 9</td>
                <td>OpenGL 3.1, OpenGL ES 2.0 or DirectX 11</td>
              </tr>
              <tr>
                <td>sound</td>
                <td>any sound device will do</td>
                <td>24-bit sound chipset/card/audio interface with low-latency support</td>
              </tr>
              <tr>
                <td>display</td>
                <td>800×600</td>
                <td>1280×720 or higher</td>
              </tr>
            </table>
            <p style="font-size: 10px;">some emulation cores may have higher processor requirements:<br/>
              - Nuked-OPM and reSID: 3.0GHz Skylake/Zen, or 2.9GHz Cortex-A76/Snapdragon 845/Apple M1<br/>
              - reSIDfp: 4.0GHz Skylake/Zen 2, or Cortex-A710/Snapdragon 870/Apple M1
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="furdiv" style="background-color: #112;">
      <h1>join the factory!</h1>
      <div class="osbuttons">
        <div class="osbutton">
          <a href="https://github.com/tildearrow/furnace" target="_blank"><img class="furbutton" src="/furnace/assets/ghlogo.png" alt="GitHub"/></a>
          <p>GitHub</p>
        </div>
        <div class="osbutton">
          <a href="https://rvlt.gg/GRPS6tmc" target="_blank"><img class="furbutton" src="/furnace/assets/rvlogo.png" alt="Revolt"/></a>
          <p>Revolt</p>
        </div>
        <div class="osbutton">
          <a href="https://discord.gg/EfrwT2wq7z" target="_blank"><img class="furbutton" src="/furnace/assets/dslogo.png" alt="Discord"/></a>
          <p>Discord</p>
        </div>
      </div>
    </div>
    <div class="furdiv" style="background-color: #000; color: #999;">
      <p style="font-size: 10px;">this project is made possible by the efforts of several experts who dedicated their free time to building the biggest multi-system chiptune tracker in history.</p>
      <p style="font-size: 10px;">despite the countless hours we've spent testing, catching bugs and fixing them, Furnace is not perfect and there might still be some issues.</p>
      <p style="font-size: 10px;">some technical computing background is recommended for the best experience.</p>
    </div>
    <div class="furfooter">
      tildearrow - <a href="/?p=privacy">privacy</a> - <a href="/?p=contact">contact</a>
    </div>
  </body>
</html>
