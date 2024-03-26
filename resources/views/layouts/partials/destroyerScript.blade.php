<script>
  const destroyerBtns = document.querySelectorAll('[data-modal-type="destroyer"]')

  destroyerBtns.forEach((destroyerBtn) => {
    const modalId = destroyerBtn.getAttribute("data-modal-id")
    const modalEl = document.querySelector(`#${modalId}`)

    destroyerBtn.addEventListener("click", function () {
      modalEl.classList.remove("d-none")
    })

    modalEl.addEventListener("click", function (ev) {
      // console.log(ev.target.getAttribute("id"))
      if(
        ev.target.getAttribute("id") == modalId ||
        ev.target.getAttribute("role") == "cancel"
        )
        modalEl.classList.add("d-none")
    })

  })

</script>