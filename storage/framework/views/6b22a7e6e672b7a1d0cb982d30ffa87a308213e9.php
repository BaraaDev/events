<div class="send-message-popup">
    <h5>Send a Message</h5>
    <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnais.</p>
    <form class="form-validate contact-form crumina-submit"  data-nonce="crumina-submit-form-nonce" data-type="standard" wire:submit.prevent="submit">
        <div class="with-icon">
            <input wire:model="name" placeholder="Your Name" type="text" <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
        </div>

        <div class="with-icon">
            <input wire:model="email" placeholder="Email Adress" type="text" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
        </div>

        <div class="with-icon">
            <input class="with-icon" wire:model="phone" placeholder="Phone Number" type="tel" <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
        </div>

        <div class="with-icon">
            <input class="with-icon" wire:model="subject" placeholder="Subject" type="text" <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <svg class="utouch-icon utouch-icon-icon-1"><use xlink:href="#utouch-icon-icon-1"></use></svg>
        </div>

        <div class="with-icon">
            <textarea wire:model="message" <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> placeholder="Your Message" rows="5"></textarea>
            <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
        </div>

        <button type="submit" class="btn btn--green btn--with-shadow full-width">
            Send a Message
        </button>
    </form>
</div>

<?php /**PATH E:\laragon\www\event\resources\views/livewire/contact-us.blade.php ENDPATH**/ ?>