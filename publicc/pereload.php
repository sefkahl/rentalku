 <div class="rental-loader">

      <div class="rental-animation">
        <svg class="rental-tire" viewBox="0 0 120 120">
          <defs>
            <pattern id="rental-tire-pattern"
              width="12" height="12"
              patternUnits="userSpaceOnUse"
              patternTransform="rotate(35)">
              <path d="M0 0V12 M6 0V12"
                stroke="#555" stroke-width="3" />
            </pattern>
          </defs>

          <!-- Ban luar -->
          <circle cx="60" cy="60" r="55" fill="#111" />
          <circle cx="60" cy="60" r="49"
            fill="url(#rental-tire-pattern)" />
          <circle cx="60" cy="60" r="39" fill="#171717" />

          <!-- Velg -->
          <circle cx="60" cy="60" r="34" fill="#aaa" />
          <circle cx="60" cy="60" r="29" fill="#252525" />

          <!-- Jari-jari velg -->
          <g stroke=" #9e24ee" stroke-width="5" stroke-linecap="round">
            <path d="M60 34V86 M34 60H86
                         M42 42L78 78 M78 42L42 78" />
          </g>

          <!-- Tutup tengah -->
          <circle cx="60" cy="60" r="11" fill="#25d622" />
          <circle cx="60" cy="60" r="5" fill="#2917ca" />
        </svg>
      </div>

      <div class="rental-loading-text">RENTALKU</div>
      <div class="rental-loading-sub">Menyiapkan perjalanan...</div>

    </div>

    <style>
      .rental-loader {
        position: fixed;
        inset: 0;
        z-index: 999999;
        background: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
      }

      .rental-animation {
        position: relative;
        width: 100%;
        height: 125px;
      }

      .rental-tire {
        position: absolute;
        width: 100px;
        height: 100px;
        left: calc(50% - 50px);
        top: 10px;
        animation: rental-spin 1s linear infinite;
      }

      .rental-loading-text {
        margin-top: 15px;
        font-size: 17px;
        font-weight: 800;
        letter-spacing: 4px;
        color: #171717;
      }

      .rental-tire {
        animation: rental-spin 0.5s linear infinite;
      }

      .rental-loading-sub {
        margin-top: 5px;
        font-size: 11px;
        color: #888;
      }

      @keyframes rental-spin {
        from {
          transform: rotate(0deg);
        }

        to {
          transform: rotate(360deg);
        }
      }
    </style>

    <script>
      window.addEventListener('load', function() {
        const loader = document.querySelector('.rental-loader');

        if (loader) {
          setTimeout(function() {
            loader.style.transition = 'opacity .3s ease';
            loader.style.opacity = '0';

            setTimeout(function() {
              loader.remove();
            }, 100);
          }, 400);
        }
      });
    </script>