###
# This Makefile provides portable, stack-agnostic commands (unlike npm, e.g.)

ifneq (,)
	This makefile requires GNU Make.
endif

# ---- 

onboarded:
	@echo "Onboarding..."
	@# ... more here
	@echo "Now you're onboarded"

# ---- 

.PHONY: onboarded