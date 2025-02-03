<style>
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    #loader:after {
        content: "";
        width: 50px;
        height: 50px;
        border: 10px solid #fff;
        border-top-color: #5c7bfa;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<script>
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        const body = document.body;
        setTimeout(() => {
            loader.style.display = 'none';
        }, 0);
    });
</script>
