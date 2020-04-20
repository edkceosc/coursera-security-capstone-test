<?php
/**
 * @var \lib\model\MessageView $message
 */
?>
<article class="message is-dark">
    <div class="message-header">
        <p><?= htmlspecialchars($message->getDecryptedTitle()) ?></p>
        <p class="is-pulled-right"><?= htmlspecialchars($message->getMessage()->getMessageDate()) ?> (UTC Time)</p>
    </div>
    <div class="message-body">
        <i><?= htmlspecialchars($message->getSenderName()) ?></i> to <i><?= htmlspecialchars($message->getRecipientName()) ?></i>
        <hr>
        <p>
            <?= htmlspecialchars($message->getDecryptedMessageBody()) ?>
        </p>
    </div>
</article>